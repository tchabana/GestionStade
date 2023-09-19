const form = document.getElementById("search-form");
form.addEventListener("keyup", function(e){
    e.preventDefault();
    const token = document.querySelector("meta[name='csrf-token']").content;
    const url = this.getAttribute('action');
    const q = document.getElementById('q').value;
    fetch(url, {
        headers:{
            'Content-Type':"application/json",
            'X-CSRF-TOKEN':token,
        },
        method:'post',
        body: JSON.stringify({
            'q':q,
        })
    }).then(response=>{
            response.json().then(data=>{
                let id_events = [];
                let events = data.data;
                events.forEach(element => {
                    id_events.push(element.id)
                });
                const tab = [...document.getElementById('tableau').children];
                tab.forEach((td,i) => {
                    if (id_events[i]==td.getAttribute('id')) {
                        console.log(td.getAttribute('id')+"="+id_events[i]);
                    } else {
                        td.style.display = 'none';
                    }
                })
            })
            
        })
        .catch(error=>{
            console.log(error);
        })
})
//addEventListener("choi")