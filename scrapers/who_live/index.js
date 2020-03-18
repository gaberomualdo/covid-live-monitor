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
    const pageURL = 'https://www.who.int/emergencies/diseases/novel-coronavirus-2019';

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
