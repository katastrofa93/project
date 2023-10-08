const modalWindow = document.querySelector('.modal');
const closeMoalWindow = document.querySelector('.modal__close');
const textModalWindow = document.querySelector('.modal__message>h3');
class ToFetch{
    constructor(src, formData, send){
        this.src= src;
        this.formData = formData;
        this.send = send;
    }
    async select(){
        let select = await fetch(this.src,{
            method: 'POST',
            body: new FormData(this.formData),
        });
        try{
            if(select.ok){
                let answer = select.json();
                console.log(answer);
                answer.then(
                    result => {
                        console.log(`Resolve ${result}`);
                        textModalWindow.innerText = result;
                        modalWindow.classList.add('modal_active');
                    },
                      error => {
                        console.log(`Rejected ${error}`); 
                    }
                );
            }else{
                console.log(select.status);
            }
        }
        catch(error){
            console.log(error);
        }
        
    }
    event(){
        this.send.addEventListener('click', (e)=>{
            e.preventDefault();
            this.select();
        });
    }
    close(){
        closeMoalWindow.addEventListener('click', (e)=>{
            e.preventDefault();
            modalWindow.classList.remove('modal_active');
        });
    }
}


