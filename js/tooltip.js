(() => {
  "use strict";

  document.addEventListener("DOMContentLoaded", (function () {
    const t =
      '\n<style>\n\t.input-group{\n\t\tposition:relative;\n\t\twidth:100%;\n\t\tmargin-bottom:20px;\n\t}\n\n  \t.input-group input{\n    \twidth:100%;\n    \tbox-sizing:border-box;\n  \t}\n  \n  \t.input-group:before{\n   \t\tz-index:99;\n   \t\tcontent:attr(data-content)"";\n    \tposition:absolute;\n    \ttop:-15px; \n    \tright:0; \n    \tbackground: #cde1ec; \n    \tcolor:#000;\n    \tborder-radius:5px;\n    \tpadding:5px 5px;\n    \tfont-family: Arial;\n    \tfont-size: 14px;\n  \t}\n\n  \t.tooltip-hide.input-group:before{\n\t\tdisplay: none;\n\t}\n</style>'
        .split("\n").join(" "),
      e = [...document.querySelectorAll(".input-group > input")],
      n = [...document.querySelectorAll(".input-group")],
      o = [46, 8, 9, 27, 107, 35, 36, 37, 38, 39, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 96, 97,
        98, 99, 100, 101, 102, 103, 104, 105
      ];
    document.body.insertAdjacentHTML("beforeEnd", t), e.forEach(((t, e = 0) => {
      t.onclick = () => {
        const i = n[e];
        "name" === t.getAttribute("name") ? (i.setAttribute("data-content",
          "Kevin Otieno"), i.classList.remove("tooltip-hide")) :
          "phone" === t.getAttribute("name") && (i.setAttribute(
            "data-content", "+254-XXX-XXX-XXX"), i.classList.remove(
              "tooltip-hide"), t.addEventListener("keydown", (t => {
                t.shiftKey && (61 == t.keyCode || 187 == t
                  .keyCode) || t.ctrlKey && 65 == t.keyCode || -
                  1 !== o.indexOf(t.keyCode) && !t.shiftKey || t
                    .preventDefault()
              })))
      }
    }))
  }))
})();
