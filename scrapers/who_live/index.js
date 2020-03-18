const puppeteer = require('puppeteer');
const express = require('express');
const url = require('url');
const path = require('path');
const fs = require('fs');

// express vars
const app = express();
const PORT = 7001;

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

    const src = await page.evaluate(() => {
        return document.querySelector('#PageContent_C003_Col00 iframe').src;
    });

    // close browser
    await browser.close();

    return src;
}

// create server
app.get('/', (req, res) => {
    const pageURL =
        'https://www.cdc.gov/TemplatePackage/contrib/widgets/cdcMaps/build/index.html?chost=www.cdc.gov&cpath=/coronavirus/2019-ncov/cases-in-us.html&csearch=&chash=&ctitle=Coronavirus%20Disease%202019%20(COVID-19)%20in%20the%20U.S.%20%7C%20CDC&wn=cdcMaps&wf=/TemplatePackage/contrib/widgets/cdcMaps/build/&wid=cdcMaps1&mMode=widget&mPage=&mChannel=&class=mb-3&host=www.cdc.gov&theme=theme-cyan&configUrl=/coronavirus/2019-ncov/map-cases-us.json';

    getData(pageURL)
        .then(src => {
            res.type('application/json');
            res.end(src);
        })
        .catch(err => {
            console.log(err);
        });
});

// listen on defined port
app.listen(PORT);
