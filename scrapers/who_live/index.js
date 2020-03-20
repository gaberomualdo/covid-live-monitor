/*
This file creates a web server on port 7001.

Upon request, the server scrapes the WHO coronavirus page and returns the URL of a video of the latest virus press release.
*/

const puppeteer = require('puppeteer');
const express = require('express');
const url = require('url');
const path = require('path');
const fs = require('fs');

// express vars
const app = express();
const PORT = 7001;

// function to get video source URL with given WHO page URL
async function getData(url) {
    // create browser obj
    const browser = await puppeteer.launch({
        headless: true
    });

    // create a new page in browser
    const page = await browser.newPage();

    // viewport dimensions
    await page.setViewport({ width: 960, height: 390 });

    // open given URL, get URL of video source and store in variable
    await page.goto(url);

    const src = await page.evaluate(() => {
        return document.querySelector('#PageContent_C003_Col00 iframe').src;
    });

    // close browser
    await browser.close();

    // return URL of video source (src variable)
    return src;
}

// create server
app.get('/', (req, res) => {
    // WHO coronavirus page URL
    const pageURL = 'https://www.who.int/emergencies/diseases/novel-coronavirus-2019';

    // get video source URL from given WHO virus page, and return as JSON in server
    getData(pageURL)
        .then(src => {
            res.type('application/json');
            res.end(src);
        })
        .catch(err => {
            console.log(err);
        });
});

// listen for server on defined port
app.listen(PORT);
