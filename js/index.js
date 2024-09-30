const searchIcon = document.querySelector('.fa-search');
const searchBar = document.querySelector('.search-bar');

searchIcon.addEventListener('click', () => {
    searchBar.classList.toggle('show');
});
//Dropdow informações da tela de produtos produtos
const optionMenu = document.querySelector(".select-menu"),
       selectBtn = optionMenu.querySelector(".select-btn"),
       options = optionMenu.querySelectorAll(".option"),
       sBtn_text = optionMenu.querySelector(".sBtn-text"),
       quantityInput = document.querySelector('.quantity-input'),
       optionsList = document.querySelector('.options');
       selectBtnText = document.querySelector('.sBtn-text');

selectBtn.addEventListener("click", () => optionMenu.classList.toggle("active"));
    selectBtn.addEventListener('click', () => {
        optionsList.style.display = optionsList.style.display == 'block' ? 'none' : 'block';
    });

options.forEach(option =>{
    option.addEventListener("click", ()=>{
        let selectedOption = option.querySelector(".option-text").innerText;
        sBtn_text.innerText = selectedOption;
        optionMenu.classList.remove("active");
        if(selectedOption == 'Mais de 6 unidades'){
            optionsList.style.display = 'none';
            quantityInput.style.display = 'block';
            quantityInput.focus();
        } else{
            if(option.textContent == 1){
                selectBtnText.textContent = option.textContent + " unidade";
            } else{
                selectBtnText.textContent = option.textContent + " unidades";
            }
            optionsList.style.display = 'none';
            quantityInput.style.display = 'none';
        }
    });
});
    document.addEventListener('click', (event) => {
        if (!selectBtn.contains(event.target) && !optionsList.contains(event.target) && !quantityInput.contains(event.target)) {
            optionsList.style.display = 'none';
            if (quantityInput.value === '') {
                quantityInput.style.display = 'none';
            }
        }
    });
quantityInput.addEventListener('blur', () => {
    if (quantityInput.value !== '') {
        if(quantityInput.value == 1){
            selectBtnText.textContent = quantityInput.value + " unidade";
        } else{
            selectBtnText.textContent = quantityInput.value + " unidades";
        }
    } else {
        quantityInput.style.display = 'none';
    }
});
//Função para compartilhamento de links
//Precisa verificar uma forma de ajustar esse link
     document.querySelector('.compartilharLinkProduto').addEventListener('click', function(event) {
        event.preventDefault(); // Previne o comportamento padrão do link

        // Copiar o link da página atual
        const url = window.location.href;
        navigator.clipboard.writeText(url)
            .then(() => {
                alert('Link copiado para a área de transferência!');
            })
            .catch(err => {
                console.error('Erro ao copiar o link: ', err);
            });
    });