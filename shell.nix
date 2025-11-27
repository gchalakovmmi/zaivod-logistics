let
	nixpkgs = fetchTarball "https://github.com/NixOS/nixpkgs/tarball/nixos-25.05";
	pkgs = import nixpkgs { config = {}; overlays = []; };
in

pkgs.mkShellNoCC {
	packages = with pkgs; [
		bash
		neovim
		tree
		git
		go
		templ
		cmake
		docker
		libwebp
		sqlite
	];

	# Set bash as the shell
	shell = "${pkgs.bash}/bin/bash";

	shellHook = ''
		alias v='nvim'
		alias vi='nvim'
		alias vim='nvim'
	'';
}
