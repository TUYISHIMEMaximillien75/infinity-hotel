document.addEventListener("DOMContentLoaded", function () {
  const chatInput = document.getElementById("chat-input");
  const sendChatBtn = document.getElementById("send-button");
  const chatbox = document.querySelector(".chatbox");
  const chatbotToggler = document.querySelector(".chatbot-toggler");
  const chatbot = document.querySelector(".chatbot");
  const chatbotClose = document.querySelector(".chatbot header span");

  chatbotToggler.addEventListener("click", () => {
    chatbot.style.display = "flex";
    chatbotToggler.style.display = "none";
  });

  chatbotClose.addEventListener("click", () => {
    chatbot.style.display = "none";
    chatbotToggler.style.display = "flex";
  });

  sendChatBtn.addEventListener("click", handleChat);
  chatInput.addEventListener("keydown", (event) => {
    if (event.key === "Enter") {
      event.preventDefault();
      handleChat();
    }
  });

  function handleChat() {
    const userMessage = chatInput.value.trim();
    if (!userMessage) return;

    // Display the user's message
    const outgoingChatLi = createChatLi(userMessage, "outgoing");
    chatbox.appendChild(outgoingChatLi);

    // Clear the input field after sending the message
    chatInput.value = "";

    // Display "Thinking...." message
    const thinkingMessage = createChatLi("Thinking....", "incoming");
    chatbox.appendChild(thinkingMessage);

    // Send the user's message to the server and get the response
    fetch("http://localhost:3000/chat", {
      method: "POST",
      headers: { "Content-Type": "application/json" },
      body: JSON.stringify({ message: userMessage }),
    })
      .then((response) => response.json())
      .then((data) => {
        chatbox.removeChild(thinkingMessage); // Remove "Thinking...." message
        const responseMessage = createChatLi(data.response, "incoming");
        chatbox.appendChild(responseMessage);
      })
      .catch((error) => {
        chatbox.removeChild(thinkingMessage); // Remove "Thinking...." message
        const errorMessage = createChatLi(
          "Sorry, something went wrong.",
          "incoming"
        );
        chatbox.appendChild(errorMessage);
        console.error("Error:", error);
      });
  }

  function createChatLi(message, className) {
    const chatLi = document.createElement("li");
    chatLi.classList.add("chat", className);
    const chatContent =
      className === "outgoing"
        ? `<p>${message}</p>`
        : `<span class="material-symbols-outlined">smart_toy</span><p>${message}</p>`;
    chatLi.innerHTML = chatContent;
    return chatLi;
  }
});

const popup = document.getElementById("popup");
const Close = document.getElementById("close");
const videoPopup1 = document.getElementById("videoPopup1");

popup.addEventListener("click", () => {
  videoPopup1.style.display = "block";
  const vid = document.getElementById("videoClip");
  vid.play();
});
Close.addEventListener("click", () => {
  videoPopup1.style.display = "none";
  const vid = document.getElementById("videoClip");
  vid.pause();
});