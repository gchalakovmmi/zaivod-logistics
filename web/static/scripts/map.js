function load_map(width, height, x, y) {
	// Simple map initialization function
	console.log("Map loaded with dimensions:", width, height, x, y);
	
	// Ensure the iframe is visible and properly sized
	const iframe = document.getElementById('gmap_canvas');
	if (iframe) {
		iframe.style.minHeight = '400px';
		iframe.style.display = 'block';
	}
}
