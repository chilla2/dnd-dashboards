(()=>{var e=function(e){document.querySelectorAll("button.field-collection-add-button").forEach((function(e){var o=e.closest("[data-ea-collection-field]");o&&!o.classList.contains("processed")&&t.handleAddButton(e,o)}))};window.addEventListener("DOMContentLoaded",e),document.addEventListener("ea.collection.item-added",e);var t={handleAddButton:function(e,t){e.addEventListener("click",(function(){var e=t.classList.contains("field-array"),o=parseInt(t.dataset.numItems),c=this.parentElement.querySelector(".collection-empty");null!==c&&(c.outerHTML=e?'<div class="ea-form-collection-items"></div>':'<div class="ea-form-collection-items"><div class="accordion"><div class="form-widget-compound"></div></div></div>');var a=t.dataset.formTypeNamePlaceholder,d=new RegExp(a+"label__","g"),n=new RegExp(a,"g"),l=t.dataset.prototype.replace(d,o).replace(n,o);t.dataset.numItems=++o;var i=e?".ea-form-collection-items":".ea-form-collection-items .accordion > .form-widget-compound",s=t.querySelector(i);if(s.insertAdjacentHTML("beforeend",l),!e){var r=s.querySelectorAll(".accordion-item"),m=r[r.length-1];m.querySelector(".accordion-button").classList.remove("collapsed"),m.querySelector(".accordion-collapse").classList.add("show")}document.dispatchEvent(new Event("ea.collection.item-added"))})),t.classList.add("processed")}}})();