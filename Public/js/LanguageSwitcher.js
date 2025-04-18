class LanguageSwitcher {
    constructor(defaultLang = 'pt') {
        this.defaultLang = defaultLang;
        this.translations = {
            en: './Public/lang/lang-en.json',
            pt: './Public/lang/lang-pt.json'
        };
        this.language = this.getLanguageFromURL() || this.defaultLang;
    }

    getLanguageFromURL() {
        const urlParams = new URLSearchParams(window.location.search);
        return urlParams.get('lang');
    }

    async loadLanguage() {
        const translationFile = this.translations[this.language];
        if (!translationFile) return;

        try {
            const response = await fetch(translationFile);
            const data = await response.json();
            this.applyTranslations(data);
        } catch (error) {
            console.error('Translation Error:', error);
        }
    }

    applyTranslations(data) {
        Object.keys(data).forEach((key) => {
            const elements = document.querySelectorAll(`[data-translate="${key}"]`);
            elements.forEach((el) => {
                el.innerHTML = data[key];
            });
        });
    }
}

const languageSwitcher = new LanguageSwitcher();
languageSwitcher.loadLanguage();