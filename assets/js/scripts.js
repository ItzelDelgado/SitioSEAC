((function(){
    let programados = document.getElementById('programados');
    let enCurso = document.getElementById('enCurso');
    let pasados = document.getElementById('pasados');

    let programadosClass = document.querySelectorAll('.programados');
    let enCursoClass = document.querySelectorAll('.enCurso');
    let pasadosClass = document.querySelectorAll('.pasados');
    
    programados.addEventListener('click', () => {
        programadosClass.forEach(element => {
            element.classList.remove('hidden');
            element.classList.add('block');

        });

        enCursoClass.forEach(element => {
            element.classList.add('hidden');
            // pasadosClass.classList.add('hidden');
        });
        
        
    })

    enCurso.addEventListener('click', () => {
        enCursoClass.forEach(element => {
            element.classList.remove('hidden');
            element.classList.add('block');
            // programadosClass.classList.add('hidden');
            // pasadosClass.classList.add('hidden');
            // console.log("en Curso reportando");    
        });

        programadosClass.forEach(element => {
            element.classList.add('hidden');
        });
        
    })

    // pasados.addEventListener('click', () => {
    //     pasadosClass.classList.remove('hidden');
    //     pasadosClass.classList.add('block');
    //     programadosClass.classList.add('hidden');
    //     enCursoClass.classList.add('hidden');
    //     console.log("pasados reportando");
    // })
})());