const langHead = document.querySelector("#lang-head");
const langBody = document.querySelector("#lang-body");
const navbarToggler = document.querySelector("#navbar-toggler");
const offCanvas = document.querySelector("#header-off-canvas");
const videoWrappper = document.querySelector("#videoWrapper");
const submitApplicationModal = document.querySelector("#submit-application");
const applicationCloseBtn = document.querySelector("#applicationCloseBtn");
const searchContent = document.querySelector("#searchContent");
const searchBtn = document.querySelector("#searchBtn");
const dropdownContent = document.querySelector("#dropdownContent");
const dropdownBtn = document.querySelector("#dropdownBtn");
const currentLanguages = document.querySelector(".current-language");
const projectWrapper = document.querySelector("#project-wrapper");
let projectWrapperOld = projectWrapper;
(function () {
  console.log(projectWrapperOld.childElementCount);
  let firstChild = projectWrapper[0];
  let secondChild = projectWrapper[1];
  let thirthChild = projectWrapper[2];
  let fourthtChild = projectWrapper[3];

  // projectWrapper.innerHTML = "<div>bo'sh</div>";
  // projectWrapper.innerHTML = firstChild;
})();

navbarToggler?.addEventListener("click", () => {
  offCanvas.classList.add("open-canvas");
  offCanvas.children[0].classList.remove("-translate-x-[100%]");
  offCanvas.children[0].classList.add("translate-x-o");
});

document.body.addEventListener("click", (e) => {
  if (e.target === offCanvas) {
    offCanvas.children[0].classList.add("-translate-x-[100%]");
    offCanvas.children[0].classList.remove("translate-x-o");
    setTimeout(() => {
      offCanvas.classList.remove("open-canvas");
    }, 100);
  } else if (e.target === submitApplicationModal) submitApplicationModalClose();

  openSearch(event);
  openDropdown(event);

  if (
    e.target.parentElement?.id == "searchBtn" ||
    e.target.parentElement.parentElement?.id == "searchBtn" ||
    e.target.parentElement?.id == "dropdownBtn" ||
    e.target.parentElement.parentElement?.id == "dropdownBtn" ||
    e.target.parentElement.parentElement.parentElement?.id == "dropdownBtn" ||
    e.target.parentElement.parentElement.parentElement.parentElement?.id ==
      "dropdownBtn" ||
    e.target == searchContent ||
    e.target.parentElement.parentElement == searchContent ||
    e.target.parentElement.parentElement == searchContent
  ) {
  } else {
    if (
      searchContent.classList.contains("block") ||
      dropdownContent.classList.contains("block")
    ) {
      searchContent.classList.remove("block");
      searchContent.classList.add("hidden");
      dropdownContent.classList.remove("block");
      dropdownContent.classList.add("hidden");
    }
  }
});

let togglePlayVideo = false;
videoWrappper?.addEventListener("click", (e) => {
  videoWrappper.querySelector("#videoImg").click();
  const videoModal = document.querySelector(".fancybox-content");
  const src = videoModal?.querySelector("video source")?.src?.trim();

  setTimeout(() => {
    if (src !== undefined) {
      const newChild = `<video class="fancybox-video m-0 p-0 object-fill" src="${src}" controls=""></video>`;
      videoModal.innerHTML = newChild;
    }
  }, 100);
});

function removeLastBorder() {
  let productInfoItem = document.querySelector(
    ".product-info-table-content"
  )?.children;
  productInfoItem?.[productInfoItem.length - 1].classList.remove("border-b");
}
removeLastBorder();

function submitApplicationModalClose() {
  submitApplicationModal.classList.remove("flex");
  submitApplicationModal.classList.add("hidden");
}

function submitApplicationModalOpen() {
  submitApplicationModal?.classList.remove("hidden");
  submitApplicationModal?.classList.add("flex");
}

function openSearch(e) {
  if (
    e.target.parentElement.id == "searchBtn" ||
    e.target.parentElement.parentElement.id == "searchBtn"
  )
    if (searchContent.classList.contains("block")) {
      if (e.target == searchContent || e.target.parentElement == searchContent);
      else {
        searchContent.classList.remove("block");
        searchContent.classList.add("hidden");
      }
    } else {
      if (dropdownContent.classList.contains("block")) {
        dropdownContent.classList.remove("block");
        dropdownContent.classList.add("hidden");
      }
      searchContent.classList.remove("hidden");
      searchContent.classList.add("block");
    }
}

function openDropdown(e) {
  if (
    e.target.parentElement?.id == "dropdownBtn" ||
    e.target.parentElement.parentElement?.id == "dropdownBtn" ||
    e.target.parentElement.parentElement.parentElement?.id == "dropdownBtn" ||
    e.target.parentElement.parentElement.parentElement.parentElement?.id ==
      "dropdownBtn"
  )
    if (dropdownContent.classList.contains("block")) {
      if (
        e.target == dropdownContent ||
        e.target.parentElement == dropdownContent
      );
      else {
        dropdownContent.classList.remove("block");
        dropdownContent.classList.add("hidden");
      }
    } else {
      if (searchContent.classList.contains("block")) {
        searchContent.classList.remove("block");
        searchContent.classList.add("hidden");
      }
      dropdownContent.classList.remove("hidden");
      dropdownContent.classList.add("block");
    }
}

dropdownContent.addEventListener("click", (e) => {
  if (e.target.id == "en") {
    currentLanguages.textContent = e.target.textContent;
  } else if (e.target.id == "ru") {
    currentLanguages.textContent = e.target.textContent;
  }
});

function resizeProjectItem() {
  const childenCount = projectWrapper?.childElementCount;
  let childCountArr = [2, 5, 8, 11, 14, 17, 20, 23, 26, 29];
  let result = childCountArr.filter((num) => num == childenCount);
  if (childCountArr.includes(childenCount)) {
    projectWrapper.children[result[0] - 1].style.width = "100%";
  }
}
resizeProjectItem();
