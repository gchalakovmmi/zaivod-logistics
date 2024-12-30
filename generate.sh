if [ $# -ne 1 ]; then
	echo "Wrong use of the generator. "
	echo "Usage: ./generate.sh generated_page_name"
	echo "Example: ./generate.sh index.php"
	exit 1
fi

rm -r generated
cp -r resources generated
cp config/config.php generated

php page_constructor.php > generated/$1

firefox --new-window localhost:8080/$1
