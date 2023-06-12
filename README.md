Easy way to send page indexing requests directly to google search console

## Setup

- create google service account, create a secret key and download CREDENTIAL_FILENAME.json.
- upload CREDENTIAL_FILENAME.json to .storae/app/credentials folder path.
- add path to CREDENTIAL_FILENAME.json in IndexingController to line 16.

## Usage

- add url you want indexing as a parameter in the url e.g. http://localhost/gsc-index?url="url"
