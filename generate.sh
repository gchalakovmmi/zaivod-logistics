if [ $# -ne 1 ]; then
	echo "Wrong use of the generator. "
	echo "Usage: ./generate.sh generated_page_name"
	echo "Example: ./generate.sh index.php"
	exit 1
fi

rm -r app
cp -r resources app
cp config/config.php app

php page_constructor.php > app/$1
