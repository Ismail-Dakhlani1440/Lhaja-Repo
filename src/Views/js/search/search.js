const input = document.getElementById("search");
const result = document.getElementById("result");

input.addEventListener("keyup", () => {
    let value = input.value;

    if (value.length === 0) {
        result.innerHTML = "";
        return;
    }

   fetch("/search?search=" + value)
        .then(res => res.json())
        .then(data => {
            result.innerHTML = "";

            data.forEach(post => {
                result.innerHTML += `
                    <li>
                        <strong>${post.id}</strong><br>
                        ${post.lieu} - ${post.poste} - ${post.mission} - ${post.salaire}
                    </li>
                `;
            });
        });
});
