const section = document.getElementById("event");
const lesprix = document.getElementById("price");
section.addEventListener("click", function(e){
    const token = document.querySelector("meta[name='csrf-token']").content;
    const url = `priceforevent/${section.value}`;
    fetch(url, {
        headers:{
            'Content-Type':"application/json",
            'X-CSRF-TOKEN':token,
        },
        method:'GET',
    }).then(response=>{
            response.json().then(data=>{
                lesprix.innerHTML = "";
                for (let index = 1; index < 6; index++) {
                    if (data[index]!==null) {
                        const op = document.createElement("option");
                        let v = data[index].split('⇾')[1]*1;
                        let t = data[index].split('⇾')[0];
                        op.innerHTML = `
                            <option class="text-black font-bold " value="${v}">
                                ${v}
                            </option>
                        `
                        lesprix.appendChild(op);
                    }
                }
                console.log(data);
            })
        })
        .catch(error=>{
            console.log(error);
        })
})