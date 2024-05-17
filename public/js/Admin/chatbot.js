const chat = document.querySelector(".chat-bot");
const show = document.querySelector(".show-bot");
chat.addEventListener("click", () => {
    show.classList.toggle('active');
})
