((function(){
    let programados = document.getElementById('programados');
    let enCurso = document.getElementById('enCurso');
    let pasados = document.getElementById('pasados');

    let programadosClass = document.querySelector('.programados');
    let enCursoClass = document.querySelector('.enCurso');
    let pasadosClass = document.querySelector('.pasados');
    
    programados.addEventListener('click', () => {
        // programadosClass.classList.remove('hidden');
        programadosClass.classList.add('block');
        enCursoClass.classList.add('hidden');
        pasadosClass.classList.add('hidden');
        console.log("programados reportado");
    })

    enCurso.addEventListener('click', () => {
        enCursoClass.classList.remove('hidden');
        enCursoClass.classList.add('block');
        programadosClass.classList.add('hidden');
        pasadosClass.classList.add('hidden');
        console.log("en Curso reportando");
    })

    pasados.addEventListener('click', () => {
        pasadosClass.classList.remove('hidden');
        pasadosClass.classList.add('block');
        programadosClass.classList.add('hidden');
        enCursoClass.classList.add('hidden');
        console.log("pasados reportando");
    })
})());