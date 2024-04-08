const multipleSelect = document.querySelectorAll("select.select-multiple");
multipleSelect?.forEach(select=>{
    [...select.options].slice(1).forEach(option=>(option.textContent = "+ " + option.textContent));
    const ogOption = select.options[0]
      , ogText = ogOption.textContent
      , valuesList = [];
    select.addEventListener("change", ()=>{
        const option = select.options[select.selectedIndex]
          , newValue = option.value
          , index = valuesList.indexOf(newValue);
        if (index !== -1) {
            valuesList.splice(index, 1);
            option.classList.remove("added");
        } else {
            valuesList.push(newValue);
            option.classList.add("added");
        }
        let outValue = valuesList.map(day=>day.slice(0, valuesList.length < 3 ? day.length : 3)).join(", ");
        ogOption.text = outValue || ogText;
        ogOption.value = outValue;
        select.value = outValue;
        option.textContent = option.textContent.replace(/(\+|-)/, valuesList.includes(newValue) ? "-" : "+");
    }
    );
}
);
const rangeSliders = document.querySelectorAll(".range-slider");
rangeSliders?.forEach(slider=>{
    const input = slider.querySelector(".slider-input")
      , output = slider.querySelector(".slider-value .value-output");
    function setProgress() {
        input.style.setProperty("--progress", ((input.value - input.min) / (input.max - input.min)) * 100);
    }
    setProgress();
    slider.addEventListener("input", ()=>{
        setProgress();
        output.textContent = input.value;
    }
    );
}
);
const popups = document.querySelectorAll(".popup");
popups?.forEach(popup=>{
    const popupContent = popup.querySelector(".popup .container");
    window.addEventListener("click", e=>{
        if ((!popup.classList.contains("open") && e.target.closest(".toggle-btn")) || popup.classList.contains("disabled"))
            return;
        (!popupContent.contains(e.target) || e.target.closest(".close-btn")) && popup.classList.remove("open");
    }
    );
}
);
const toggleBtns = document.querySelectorAll(".toggle-btn");
toggleBtns.forEach(btn=>{
    if (btn.dataset.target) {
        const target = document.querySelector(btn.dataset.target);
        if (target) {
            btn.addEventListener("click", e=>{
                e.stopPropagation();
                target.classList.toggle(btn.dataset.toggle);
            }
            );
        } else {
            console.warn(`No target found for ${btn.outerHTML}`);
        }
    }
}
);
window.addEventListener("click", e=>{
    let isToggleBtn = e.target.closest(".toggle-btn");
    if (isToggleBtn)
        return;
    toggleBtns.forEach(btn=>{
        const target = document.querySelector(btn.dataset.target);
        if (target && !btn.contains(e.target) && !target.contains(e.target)) {
            target.classList.remove(btn.dataset.toggle);
        }
    }
    );
}
);
window.addEventListener("load", ()=>document.body.classList.add("loaded"));
function showPopup(element) {
    event.stopImmediatePropagation();
    console.log("showPopup started");
    const btn = element;
    const target = document.querySelector(btn.dataset.target);
    if (target) {
        console.log("Before adding class");
        target.classList.add(btn.dataset.toggle);
        console.log("After adding class");
    }
}
