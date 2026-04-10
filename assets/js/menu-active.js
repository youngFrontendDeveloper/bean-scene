// Активный пункт меню для якорных ссылок

(function () {
	const links = document.querySelectorAll('.nav a[href*="#"]');

	function setActiveFromHash() {
		const hash = window.location.hash || '#home';

		links.forEach((a) => {
			const href = a.getAttribute('href') || '';
			const isActive = href.endsWith(hash);

			a.classList.toggle('is-active', isActive);

			const li = a.closest('li');
			if (li) {
				li.classList.toggle('is-active', isActive);
			}
		});
	}

	window.addEventListener('hashchange', setActiveFromHash);
	document.addEventListener('DOMContentLoaded', setActiveFromHash);
})();