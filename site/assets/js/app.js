// app nav functionality
(() => {
  const overviewBtn = document.querySelector('.panel.main-app .tab-select li.overview');
  const healthBtn = document.querySelector('.panel.main-app .tab-select li.health');

  const mainAppContainer = document.querySelector('.panel.main-app');

  const clearCurrentTab = () => {
    mainAppContainer.classList.remove('overview-active');
    mainAppContainer.classList.remove('health-active');
  };

  overviewBtn.addEventListener('click', () => {
    clearCurrentTab();
    mainAppContainer.classList.add('overview-active');
    removeHashFromURL();
  });

  healthBtn.addEventListener('click', () => {
    clearCurrentTab();
    mainAppContainer.classList.add('health-active');
  });
})();

// live video updates from the WHO
(() => {
  const overviewPanelVideoContainerElm = document.querySelector('.panel.main-app .tabs > section.overview > .video-container');
  overviewPanelVideoContainerElm.innerHTML += `
    <iframe width="100%" height="100%" src="${liveVideoURL}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    `;
})();
