// elm vars
const currentCaseCountElm = document.querySelector('.panel.current-cases .case-count');
const deathsCountElm = document.querySelector('.panel.stats .deaths span');
const recoveriesCountElm = document.querySelector('.panel.stats .recoveries span');
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
  currentCaseCountLastUpdatedElm.innerText = 'Updated ' + moment(totalCurrentCasesLastUpdated).fromNow();

  // deaths and recoveries
  deathsCountElm.innerHTML = `<strong>${numberWithCommas(parseInt(totalDeaths))}</strong> (${Math.floor(
    (parseInt(totalDeaths) / parseInt(totalCurrentCases)) * 100
  ).toString()}%)`;
  recoveriesCountElm.innerHTML = `<strong>${numberWithCommas(parseInt(totalRecoveries))}</strong> (${Math.floor(
    (parseInt(totalRecoveries) / parseInt(totalCurrentCases)) * 100
  ).toString()}%)`;
})();

window.addEventListener('load', () => {
  fitty(currentCaseCountElm);
});
