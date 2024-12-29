if [ $# -ne 1 ]; then
	echo "Wrong use of the generator. "
	echo "Usage: ./generate.sh generated_page_name"
	echo "Example: ./generate.sh index.php"
	exit 1
fi

php generator.php > $1

firefox --new-window localhost:8080/$1
