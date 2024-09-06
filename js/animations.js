let isFunctionUsed = false;
function scrollToSection(sectionId) {

    isFunctionUsed = true;
    isBeingused()
    document.getElementById(sectionId).scrollIntoView({
        behavior: 'smooth'
    });
    isFunctionUsed = false;
}

function getVisiblePercentage(element) {
    const rect = element.getBoundingClientRect();
    const windowHeight = window.innerHeight;

    
    const visibleHeight = Math.min(rect.bottom, windowHeight) - Math.max(rect.top, 0);
    const elementHeight = rect.height;

 
    return Math.max(0, Math.min(100, (visibleHeight / elementHeight) * 100));
}

function handleScroll() {
    document.querySelectorAll('.section').forEach(section => {

        const visiblePercentage = getVisiblePercentage(section);
        console.log(`${section.id} is ${visiblePercentage.toFixed(2)}% visible.`);
        if(isFunctionUsed == true)return;
        if(visiblePercentage.toFixed(2) > 25 && visiblePercentage.toFixed(2) <55){

            document.getElementById(section.id).scrollIntoView({
                behavior: 'auto'
            });

        }

    });
}
window.addEventListener('scroll', handleScroll);
window.addEventListener('resize', handleScroll); 
handleScroll();
isBeingused();
function isBeingused(){
if(isFunctionUsed == false){
    console.log('no');
}else{
    console.log('yes');
}
}