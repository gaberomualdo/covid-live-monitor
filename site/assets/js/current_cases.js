// elm vars
const currentCaseCountElm = document.querySelector('.panel.current-cases .case-count');
const currentCaseCountLastUpdatedElm = document.querySelector('.panel.current-cases .last-updated');

// set current case count and last updated
(() => {
    // current case count
    const numberParts = numberWithCommas(parseInt(totalCurrentCases)).split(',');
    let finalCurrentCaseCountHTML = '';

    numberParts.forEach((part, ind) => {
        finalCurrentCaseCountHTML += `<span>${part}</span>`;
        if (ind < numberParts.length - 1) {
            finalCurrentCaseCountHTML += ',';
        }
    });

    currentCaseCountElm.innerHTML = finalCurrentCaseCountHTML;

    // last updated
    currentCaseCountLastUpdatedElm.innerText = 'Updated ' + moment(totalCurrentCasesLastUpdated).calendar();
})();

window.addEventListener('load', () => {
    fitty(currentCaseCountElm);
});
