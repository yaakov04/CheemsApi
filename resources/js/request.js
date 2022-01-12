const url = window.location.href
const getData = async(endpoint) => {
    const apiUrl = `${url}api/v1${endpoint}`

    try {
        const response = await fetch(apiUrl)
        const data = await response.json();
        return data
    } catch (error) {
        console.log('Fetch Error', error);
    } 
}

const request = async(e) => {
    e.preventDefault()
    const input = document.querySelector('#input')
    const response = document.querySelector('#response')
    response.innerHTML=`
    <div class="loader-container">
        <div class="loader"></div>
    </div>
    `
    if (!input.value) {
        alert('El campo no puede ir vacio')
        return
    }
    const data = await getData(input.value)
    const jsonPretty = JSON.stringify(data, null,2)
    response.classList.remove('response__body-center')
    response.innerHTML= `
        <pre>
            ${jsonPretty}
        </pre>
    `
}

export default request