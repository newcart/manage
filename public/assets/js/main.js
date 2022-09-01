document.querySelector('.btn-expand-collapse').addEventListener("click", toggleClass);
    
    function toggleClass(){
     if(document.querySelector('.navbar-primary').classList.contains('collapsed'))
        {
            document.querySelector('.navbar-primary').classList.remove('collapsed');
        }
        else{
            document.querySelector('.navbar-primary').classList.add('collapsed');
        }
};

document.querySelector('.mobile-sidenav').addEventListener("click", toggleClass);
    
    function toggleClass(){
     if(document.querySelector('.navbar-primary').classList.contains('collapsed'))
        {
            document.querySelector('.navbar-primary').classList.remove('collapsed');
        }
        else{
            document.querySelector('.navbar-primary').classList.add('collapsed');
        }
};
