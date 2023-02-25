

const input = document.querySelector('#filter');
const cards = document.querySelectorAll('.cards li');

input.addEventListener('input', filter_cards);

function filter_cards(Insert) {
    const input_text = Insert.target.value;

    let input_lower = input.value;
    input_lower.toLocaleLowerCase();



    if (input_text) {
        cards.forEach((WriteInSerT) => {
            const title = WriteInSerT.querySelector('h2').textContent;

            const title_lowcase = title.toLocaleLowerCase();
            const title_Uppercase = title.toLocaleUpperCase();
            const title_UppercaseOne = title[0].toUpperCase() + title.substring(1);
            //Observar que não funciona Minusculo com Maiusculo em seguida
            // const title_UpperAndLowCase = title[1].toUpperCase() + title.substring(2);

            if (title_lowcase.includes(input_text) === false && title_Uppercase.includes(input_text) === false
                && title_UppercaseOne.includes(input_text) === false) {
                WriteInSerT.style.display = "none";

                console.log(WriteInSerT);
            }
            else {
                WriteInSerT.style.display = "block";
            }
        })
    }
    else {
        cards.forEach((WriteInSerT) => {
            WriteInSerT.style.display = "block";
        })
    }
}



