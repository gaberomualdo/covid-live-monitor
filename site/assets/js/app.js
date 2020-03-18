// app nav functionality
(() => {
    const overviewBtn = document.querySelector('.panel.main-app .tab-select li.overview');
    const stockBtn = document.querySelector('.panel.main-app .tab-select li.stock');
    const healthBtn = document.querySelector('.panel.main-app .tab-select li.health');

    const mainAppContainer = document.querySelector('.panel.main-app');

    const clearCurrentTab = () => {
        mainAppContainer.classList.remove('overview-active');
        mainAppContainer.classList.remove('stock-active');
        mainAppContainer.classList.remove('health-active');
    };

    overviewBtn.addEventListener('click', () => {
        clearCurrentTab();
        mainAppContainer.classList.add('overview-active');
        removeHashFromURL();
    });

    stockBtn.addEventListener('click', () => {
        clearCurrentTab();
        mainAppContainer.classList.add('stock-active');
    });

    healthBtn.addEventListener('click', () => {
        clearCurrentTab();
        mainAppContainer.classList.add('health-active');
    });
})();
