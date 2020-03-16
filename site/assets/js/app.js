// app nav functionality
(() => {
    const calculatorBtn = document.querySelector('.panel.main-app .tab-select li.calculator');
    const symptomsBtn = document.querySelector('.panel.main-app .tab-select li.symptoms');
    const preventionBtn = document.querySelector('.panel.main-app .tab-select li.prevention');

    const mainAppContainer = document.querySelector('.panel.main-app');

    const clearCurrentTab = () => {
        mainAppContainer.classList.remove('calculator-active');
        mainAppContainer.classList.remove('symptoms-active');
        mainAppContainer.classList.remove('prevention-active');
    };

    calculatorBtn.addEventListener('click', () => {
        clearCurrentTab();
        mainAppContainer.classList.add('calculator-active');
        removeHashFromURL();
    });

    symptomsBtn.addEventListener('click', () => {
        clearCurrentTab();
        mainAppContainer.classList.add('symptoms-active');
    });

    preventionBtn.addEventListener('click', () => {
        clearCurrentTab();
        mainAppContainer.classList.add('prevention-active');
    });
})();
