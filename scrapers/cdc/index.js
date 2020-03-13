const puppeteer = require('puppeteer');
const express = require('express');
const url = require('url');
const path = require('path');
const fs = require('fs');

// express vars
const app = express();
const PORT = 1920;

async function getData(url) {
	// create browser obj
	const browser = await puppeteer.launch({
		headless: true
	});

	// create a new page in browser
	const page = await browser.newPage();
	
	// viewport dimensions (also dimensions of screenshot)
	await page.setViewport({ width: 960, height: 390 });

	// open given URL and take screenshot as plain binary
	await page.goto(url);

	console.log("url loaded");

	await page.waitForSelector('.data-table h3.collapsed');

	console.log("btn loaded");

	await page.evaluate(() => {
		function eventFire(el, etype){
			if (el.fireEvent) {
				el.fireEvent('on' + etype);
			} else {
				var evObj = document.createEvent('MouseEvents');
				evObj.initEvent(etype, true, false);
				var canceled = !el.dispatchEvent(evObj);
				if (canceled) {
					// A handler called preventDefault.
					console.log("automatic click canceled");
				} else {
					// None of the handlers called preventDefault.
				} 
			}
		}

		eventFire(document.querySelector('.data-table h3.collapsed'), 'click');
	});

	await page.waitForSelector('.rt-tbody');

	console.log("body loaded");

	const results = await page.evaluate(() => {
		const results = {states: [], cases: []};
		document.querySelectorAll(".rt-tbody .rt-tr .rt-td:nth-child(1) span:nth-child(2)").forEach(elm => results.states.push(elm.innerText))
		document.querySelectorAll(".rt-tbody .rt-tr .rt-td:nth-child(3)").forEach((elm) => results.cases.push(elm.innerText));
		
		const fullResults = []
		results.states.forEach((state, ind) => {
			let amountOfCases = results.cases[ind];

			if(amountOfCases == "None") {
				amountOfCases = 0;
			}else if(amountOfCases.indexOf(" ") > -1) {
				amountOfCasesAsArr = amountOfCases.split(" ");
				amountOfCases = parseInt(amountOfCasesAsArr[amountOfCasesAsArr.length - 1]);
			}else {
				amountOfCases = parseInt(amountOfCases);
			}

			fullResults.push({ location: `${state}, USA`, cases: amountOfCases });
		});

		return fullResults;
	});

	// close browser
	await browser.close();

	return results;
}

// create server
app.get('/', (req, res) => {
	const pageURL = "https://www.cdc.gov/TemplatePackage/contrib/widgets/cdcMaps/build/index.html?chost=www.cdc.gov&cpath=/coronavirus/2019-ncov/cases-in-us.html&csearch=&chash=&ctitle=Coronavirus%20Disease%202019%20(COVID-19)%20in%20the%20U.S.%20%7C%20CDC&wn=cdcMaps&wf=/TemplatePackage/contrib/widgets/cdcMaps/build/&wid=cdcMaps1&mMode=widget&mPage=&mChannel=&class=mb-3&host=www.cdc.gov&theme=theme-cyan&configUrl=/coronavirus/2019-ncov/map-cases-us.json";
	
	getData(pageURL).then((results) => {
		const finalResultsAsStr = JSON.stringify(results, null, 4);

		res.type("application/json");
		res.end(finalResultsAsStr);
	}).catch(err => {
		console.log(err);
	});
});

// listen on defined port
app.listen(PORT);