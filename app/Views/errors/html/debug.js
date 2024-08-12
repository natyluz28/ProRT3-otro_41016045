document.addEventListener('DOMContentLoaded', () => {
    const tabLinks = {};
    const contentDivs = {};

    function init() {
        // Grab the tab links and content divs from the page
        const tabListItems = document.getElementById('tabs').children;

        Array.from(tabListItems).forEach((item) => {
            if (item.nodeName === "LI") {
                const tabLink = getFirstChildWithTagName(item, 'A');
                const id = getHash(tabLink.getAttribute('href'));
                tabLinks[id] = tabLink;
                contentDivs[id] = document.getElementById(id);
            }
        });

        // Assign onclick events to the tab links, and highlight the first tab
        Object.keys(tabLinks).forEach((id, index) => {
            const link = tabLinks[id];
            link.onclick = showTab;
            link.onfocus = () => link.blur(); // Remove focus outline
            if (index === 0) {
                link.classList.add('active');
            }
        });

        // Hide all content divs except the first
        Object.keys(contentDivs).forEach((id, index) => {
            contentDivs[id].className = index === 0 ? 'content' : 'content hide';
        });
    }

    function showTab() {
        const selectedId = getHash(this.getAttribute('href'));

        // Highlight the selected tab and show the associated content div
        Object.keys(tabLinks).forEach((id) => {
            if (id === selectedId) {
                tabLinks[id].classList.add('active');
                contentDivs[id].classList.remove('hide');
            } else {
                tabLinks[id].classList.remove('active');
                contentDivs[id].classList.add('hide');
            }
        });

        // Prevent default link behavior
        return false;
    }

    function getFirstChildWithTagName(element, tagName) {
        return Array.from(element.children).find(child => child.nodeName === tagName);
    }

    function getHash(url) {
        const hashPos = url.lastIndexOf('#');
        return url.substring(hashPos + 1);
    }

    function toggle(elemId) {
        const elem = document.getElementById(elemId);

        if (!elem) return false;

        const displayStyle = window.getComputedStyle(elem).display;
        elem.style.display = displayStyle === 'block' ? 'none' : 'block';

        return false;
    }

    init(); // Initialize the tabs on page load
});
