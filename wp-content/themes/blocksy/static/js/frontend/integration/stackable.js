export const mountStackableIntegration = () => {
	if (window.stackableEntrance && window.stackableEntrance.init) {
		window.stackableEntrance.init()
	}

	if (window.stackableTabs && window.stackableTabs.init) {
		window.stackableTabs.init()
	}
}
