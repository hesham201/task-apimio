const interactableElements = document.querySelectorAll(".interactable");
const dashboard = document.getElementById("dashboard");
const selectedElements = [];

interactableElements.forEach((element) => {
  element.addEventListener("mouseenter", () => {
    if (!element.classList.contains("selected")) {
      element.classList.add("highlight");
    }
  });

  element.addEventListener("mouseleave", () => {
    element.classList.remove("highlight");
  });

  element.addEventListener("click", () => {
    if (element.classList.contains("selected")) {
      element.classList.remove("selected");
      const index = selectedElements.findIndex(
        (item) => item.element === element
      );
      selectedElements.splice(index, 1);
    } else {
      element.classList.add("selected");
      selectedElements.push({
        element,
        label: element.getAttribute("data-label"),
        count: 0,
      });
    }
    updateDashboard();
  });
});

function updateDashboard() {
  dashboard.innerHTML = "<h2>Selected Elements</h2>";
  selectedElements.forEach((item) => {
    const itemDiv = document.createElement("div");
    itemDiv.textContent = `${item.label} (Interactions: ${item.count})`;
    dashboard.appendChild(itemDiv);

    item.element.addEventListener("click", () => {
      item.count++;
      console.log(
        `Element Type: ${item.element.tagName}, Label: ${item.label}`
      );
    });
  });
}
document.addEventListener("DOMContentLoaded", function () {
  setTimeout(() => {
    let preLoader = document.getElementById("preloader");
    preLoader.style.display = "none";
  }, 500);

  setTimeout(() => {
    animateThings();
  }, 1000);
});
function animateThings() {
  let headingOne = document.getElementById("heading-one");
  let onlyBtns = document.getElementById("only-btns");
  let anchorSelect = document.getElementById("anchors-select");
  let videoMain = document.getElementById("video-main");
  headingOne.style.opacity = "1";
  onlyBtns.style.opacity = "1";
  onlyBtns.style.transform = "translateX(0)";
  anchorSelect.style.opacity = "1";
  anchorSelect.style.transform = "translateX(0)";
  videoMain.style.opacity = "1";
  videoMain.style.transform = "scale(1)";
}
