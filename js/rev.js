const stars=document.querySelectorAll('.star');
const current_rating=document.querySelector('.current-rating');

stars.forEach((star,index)=>{

    star.addEventListener('click',()=>{
        let current_star=index+1;
        current_rating.innerText=`${current_star} of 5`;


        stars.forEach((star,i)=>{
            if(current_star>=i+1){
                star.innerHTML='&#9733;';
            } else {
                star.innerHTML='&#9734;';
            }
        });




    });
   
    
});

function generateConfetti() {
    confetti({
        particleCount: 1500,
        spread: 1000,
        
        origin: {
            y: 0.5,
            
        },
        //colors: ['#ffd700']
    });
}




function enlargeTextSize() {
    current_rating.style.fontSize = '4rem';
}