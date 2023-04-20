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

        programados.classList.add('cursos-focus')
        enCurso.classList.remove('cursos-focus')
        pasados.classList.remove('cursos-focus')


        enCursoClass.forEach(element => {
            element.classList.add('hidden');
        });

        pasadosClass.forEach(element => {
            element.classList.add('hidden');
        });

    })

    enCurso.addEventListener('click', () => {

        enCursoClass.forEach(element => {
            element.classList.remove('hidden');
            element.classList.add('block');  
        });


        
        enCurso.classList.add('cursos-focus')
        programados.classList.remove('cursos-focus')
        pasados.classList.remove('cursos-focus')



        programadosClass.forEach(element => {
            element.classList.add('hidden');
        });

        pasadosClass.forEach(element => {
            element.classList.add('hidden');
        });
        
    })

    pasados.addEventListener('click', () => {
        
        pasadosClass.forEach(element => {
            element.classList.remove('hidden');
            element.classList.add('block');  
        });

        pasados.classList.add('cursos-focus')
        programados.classList.remove('cursos-focus')
        enCurso.classList.remove('cursos-focus')


        programadosClass.forEach(element => {
            element.classList.add('hidden');
        });

        enCursoClass.forEach(element => {
            element.classList.add('hidden');
        });

    })

    programados.click();

})());

