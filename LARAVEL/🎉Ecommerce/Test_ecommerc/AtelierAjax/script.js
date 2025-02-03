document.getElementById("button").addEventListener('click', function(){
    let page = "form.html"
    let index = document.getElementById("index")

    fetch(page)
        .then((response)=>{
            if(!response.ok){
                throw  new error("user not found ");    
            }
            return response.text()
        })
        .then(html=>{
            index.innerHTML = html 
        })       
})