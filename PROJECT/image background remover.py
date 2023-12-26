# Requires "requests" to be installed (see python-requests.org)
import requests

response = requests.post(
    'https://api.remove.bg/v1.0/removebg',
    files={'image_file': open('DSC_0735.JPG', 'rb')},
    data={'size': 'auto'},
    headers={'X-Api-Key': 'Untitled API Key (2023-06-18 09:27:53)'},
)
if response.status_code == requests.codes.ok:
    with open('no-bg.png', 'wb') as out:
        out.write(response.content)
else:
    print("Error:", response.status_code, response.text)