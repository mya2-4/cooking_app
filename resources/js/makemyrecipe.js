const categoryList = document.getElementById("category-list");
const categoryInput = document.getElementById("category-input");

categoryInput.addEventListener("keydown", function (event) {
    if (event.key === "Enter") {
        event.preventDefault();

        const categoryName = categoryInput.value.trim();

        console.log("Enterが押されました");
        console.log(categoryName);

        if (categoryName === "") {
            return;
        }

        fetch("/category", {
            method: "POST",

            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": document.querySelector(
                    'meta[name="csrf-token"]'
                ).content,
            },

            body: JSON.stringify({
                category_name: categoryName,
            }),
        })
            .then((response) => response.json())
            .then((category) => {
                // 新しいカテゴリーボタンを作る
                const button = document.createElement("button");

                button.type = "button";
                button.className =
                    "w-fit h-12 px-5 border border-gray-300 rounded-md";

                button.dataset.categoryId = category.id;
                button.textContent = category.category_name;

                // 「＋追加」の入力欄の前に追加する
                categoryList.insertBefore(button, categoryInput);

                // 入力欄を空にする
                categoryInput.value = "";
            })
            .catch((error) => {
                console.error(error);
            });
    }
});

const categoryButtons = document.querySelectorAll(
    "#category-list button[data-category-id]"
);

categoryButtons.forEach((button) => {
    button.addEventListener("click", function () {
        this.classList.toggle("bg-teal-500");
        this.classList.toggle("text-white");
    });
});

const selectedCategoryIds = new Set();

categoryButtons.forEach((button) => {
    button.addEventListener("click", function () {
        const categoryId = this.dataset.categoryId;

        if (selectedCategoryIds.has(categoryId)) {
            // 選択解除
            selectedCategoryIds.delete(categoryId);
            this.classList.remove("bg-gray-300");
        } else {
            // 選択
            selectedCategoryIds.add(categoryId);
            this.classList.add("bg-gray-300");
        }

        console.log("選択中のカテゴリ:", [...selectedCategoryIds]);
    });
});

const form = document.querySelector("form");

form.addEventListener("submit", function () {
    selectedCategoryIds.forEach((categoryId) => {
        const input = document.createElement("input");

        input.type = "hidden";
        input.name = "category_ids[]";
        input.value = categoryId;

        form.appendChild(input);
    });
});

const materialList = document.getElementById("material-list");
const addMaterialButton = document.getElementById("add-material");

addMaterialButton.addEventListener("click", function () {
    const materialRow = materialList.querySelector(".material-row");
    const newRow = materialRow.cloneNode(true);

    newRow.querySelector('input[name="materials[]"]').value = "";
    newRow.querySelector('input[name="quantities[]"]').value = "";

    materialList.appendChild(newRow);
});

materialList.addEventListener("click", function (event) {
    if (event.target.tagName === "BUTTON") {
        const rows = materialList.querySelectorAll(".material-row");

        // 1行は必ず残す
        if (rows.length > 1) {
            event.target.closest(".material-row").remove();
        }
    }
});

const procedureList = document.getElementById("procedure-list");
const addProcedureButton = document.getElementById("add-procedure");

addProcedureButton.addEventListener("click", function () {
    console.log("手順追加ボタンが押されました");

    const procedureRow = procedureList.querySelector(".procedure-row");

    const newRow = procedureRow.cloneNode(true);

    // textareaを空にする
    newRow.querySelector('textarea[name="procedures[]"]').value = "";

    // 手順番号を変更
    const rows = procedureList.querySelectorAll(".procedure-row");
    const stepNumber = rows.length + 1;

    newRow.querySelector(".step-number").textContent = stepNumber + "️⃣";

    // 追加
    procedureList.appendChild(newRow);
});

procedureList.addEventListener("click", function (event) {
    if (event.target.tagName === "BUTTON") {
        const rows = procedureList.querySelectorAll(".procedure-row");

        // 1行は必ず残す
        if (rows.length > 1) {
            event.target.closest(".procedure-row").remove();

            // 手順番号を振り直す
            procedureList
                .querySelectorAll(".step-number")
                .forEach((step, index) => {
                    step.textContent = index + 1 + "️⃣";
                });
        }
    }
});
