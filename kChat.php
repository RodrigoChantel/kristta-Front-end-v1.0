<div id="chat" class="shadow-lg bg-white">
    <div class="header-chat shadow d-flex flex-row flex-nowrap justify-content-start px-3">
        <img src="./assets/images/iconkristta.ico" class="rounded-circle" alt="">
        <h1 class="mx-3">Atendimento Kristta</h1>
        <i class="fa-solid fa-circle-xmark fs-3 position-absolute text-success" style="left:95%; top:-4%; cursor: pointer;" onclick="exitChat('awpp')"></i>
    </div>
    <div id="messages">
        <div class="message received">
            <div class="bubble shadow mt-2">
                Bem-vindo(a) ao nosso atendimento! 😊 Como posso te chamar?
            </div>
        </div>
    </div>
    <form id="message-form">
        <input type="text" id="message-input" class="rounded" placeholder="Digite aqui...">
        <button type="submit" id="send-button" class="rounded"><i class="fa fa-paper-plane"></i></button>
    </form>
</div>

<img class="a-wpp" style="cursor: pointer;" onclick="chat('chat')" id="awpp" src="./assets/images/icons/whatsApp.svg" alt="">

<script type="text/javascript" src="./assets/js/script-botchat.js"></script>

<script>

const messages = document.getElementById('messages');
const form = document.getElementById('message-form');
const input = document.getElementById('message-input');

let name = '';

function addMessage(content, isReceived) {
  const message = document.createElement('div');
  const bubble = document.createElement('div');
  message.appendChild(bubble);
  message.classList.add('message');
  if (isReceived) {
    message.classList.add('received');
  } else {
    message.classList.add('sent');
  }
  bubble.classList.add('bubble');
  bubble.classList.add('shadow');
  bubble.textContent = content;
  messages.appendChild(message);
  messages.scrollTop = messages.scrollHeight;
}

form.addEventListener('submit', (event) => {
  event.preventDefault();
  if (!name) {
    name = input.value;
    input.value = '';
    addMessage(`${name}`);
    addMessage(`Desculpe-nos, ${name}! Estamos em processo de desenvolvimento deste sistema.`, true);
    //addMessage(`Olá, ${name}! Para que eu possa te ajudar da melhor maneira possível, poderia me informar o seu e-mail, por favor? 😊`, true);
  } else {
    //const email = input.value;
    //addMessage(`${email}`);
    //addMessage(`Obrigado, ${name}, Como podemos ajudar?`, true);
    //addMessage(`1 - Atendimento`, true);
    //addMessage(`2 - Financeiro`, true);
    //const resp = input.value;
    //input.value = '';

    switch (resp) {
    case "1":
        //const url = `https://wa.me/5579999345626/?text=Nome:%20${name}%0AE-mail:%20${email}`;
        //addMessage(`${resp}`);
        //addMessage(`Você será redirecionado para o nosso atendimento whatsapp...`, true);
    break;

    } 
    //const url = `https://wa.me/5579999345626/?text=Nome:%20${name}%0AE-mail:%20${email}`;
    //window.location.href = url;


  }
});

</script>