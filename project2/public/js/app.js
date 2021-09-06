
 let arrow = document.querySelectorAll(".arrow");
                for(var i =0; i < arrow.length; i++){
                    arrow[i].addEventListener("click",(e)=>{
                        let arrowParent = e.target.parenntElement.parenntElement;
                        console.log(arrowParent);
                        arrowParent.classList.toggle("showMenu")

                    
                    });
                }
