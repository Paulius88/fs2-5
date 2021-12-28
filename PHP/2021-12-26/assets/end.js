let url = document.querySelector('.url-p p');
let copyButton = document.querySelector('.copy-button');

copyButton.addEventListener('click', () => {
    navigator.clipboard.writeText(url.textContent).then(function() {
        copyButton.disabled = true;
        copyButton.textContent = 'Copied';
        setTimeout(() => {
            copyButton.disabled = false;
            copyButton.innerHTML = '<i class="far fa-copy"></i> Copy';
        }, 1300);
    })
});
