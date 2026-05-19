async function get_id(url) {
    let request = await fetch(url);
    let text = await request.text();
    return text;
}

async function clickme_to_do_fetch() {

    let url = "./api/api.php";

    let videoId = await get_id(
        './api/get_id.php?url=' +
        document.querySelector('input[type="url"]').value
    );

    let response = await fetch(url, {
        method: "POST",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded"
        },
        body: `video_id=${videoId}`
    });
   document.getElementsByClassName("download")[0].click();
    
}