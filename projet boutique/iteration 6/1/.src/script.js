let model = document.getElementById('model').innerHTML.trim();
let code = document.getElementById('code').innerHTML.trim().replace('<br />', '<br>');

if (model !== code) {
    document.getElementById('btn').removeAttribute('href');
    document.getElementById('alert').innerHTML = 'Les 2 textes sont différents.';
    if (document.getElementById('alert').classList.contains('alert-success')) {
        document.getElementById('alert').classList.remove('alert-success');
        document.getElementById('alert').classList.add('alert-danger');
    }
}
