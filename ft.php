 
<section class="comments_section">
  <ul class="comment_list">
        <li>
            <div class="comment_card" data-depth="0">
                <figure class="figure">
                    <img class="image" src="https://newsfeedtemplate.netlify.com/img/user01.jpg" alt="Naveen Pantra"/>
                    <figcaption class="fig_caption">
                        <h5 class="name">Navefen Pantra</h5>
                        <h6 class="occupation">Software Engineer</h6>
                        <p class="date">22nd March, 2020</p>
                    </figcaption>
                </figure>
                <article class="comment_text">
                    Hello this is a test comment.
                </article>
                <div class="comment_options">
                    <button>Edit</button>
                    <button>Comment</button>
                    <button>Show Comments</button>
                </div>
                <div class="comment_edit">
                   <textarea name="comment_edit" id="comment_edit" class="comment_edit_textarea" cols="0" rows="0"></textarea>
                   <p class="comment_message">Please enter more than one character to accept comment.</p>
                    <div class="comment_edit_options">
                        <button data-action="submit">Submit</button>
                        <button data-action="cancle">Cancle</button>
                    </div>
                </div>
                <div class="comments">
                    <p class="no_comment_found">No Comments Found :(</p>
                </div>
            </div>
        </li>
    </ul>
  <!-- <ul class="comment_list">
        <li>
            <div class="comment_card" data-depth="0">
                <figure class="figure">
                    <img class="image" src="https://newsfeedtemplate.netlify.com/img/user01.jpg" alt="Naveen Pantra"/>
                    <figcaption class="fig_caption">
                        <h5 class="name">Naveen Pantra</h5>
                        <h6 class="occupation">Software Engineer</h6>
                        <p class="date">22nd March, 2020</p>
                    </figcaption>
                </figure>
                <article class="comment_text">
                    Hello this is a test comment.
                </article>
                <div class="comment_options">
                    <button>Edit</button>
                    <button>Comment</button>
                    <button>Show Comments</button>
                </div>
                <div class="comment_edit">
                   <textarea name="comment_edit" id="comment_edit" class="comment_edit_textarea" cols="0" rows="0"></textarea>
                   <p class="comment_message">Please enter more than one character to accept comment.</p>
                    <div class="comment_edit_options">
                        <button data-action="submit">Submit</button>
                        <button data-action="cancle">Cancle</button>
                    </div>
                </div>
                <div class="comments">
                    <p class="no_comment_found">No Comments Found :(</p>
                </div>
            </div>
        </li>
    </ul> -->

</section>

<script>
const generateRandomComment = (data) => {
const { count = 1, comment = false } = data;
const comments = {};
for (let i = 0; i < count; i++) {
  <?php
     echo "
     comments[nextID] = {
       id: nextID,
       imageURL: 'https://newsfeedtemplate.netlify.com/img/user01.jpg',
       imageALT: 'Rees',
       name: 'Rees',
       occupation: 'Software Engineer',
       formattedDate: getFormatedDate(new Date()),
       comment: comment || 'How to connect to mysql',
       isOpen: false,
       isEditing: false,
       isCommenting: false,
       comments: []
     };
     nextID++;
    }
     ";
  ?>

return comments;
};
</script>
<script src="./app.js"></script>
<style>
:root {
  --color-text: #2c3e50;
  --color-link: #3498db;
  --color-link-bg: #3498db1f;
  --color-red: #c0392b;
  --color-grey-light-1: #faf9f9;
  --color-grey-light-2: #f4f2f2;
  --color-grey-light-3: #f0eeee;
  --color-grey-light-4: #ccc;
  --color-grey-dark-1: #333;
  --color-grey-dark-2: #777;
  --color-grey-dark-3: #999;

  --shadow-dark: 0 2rem 6rem rgba(0, 0, 0, 0.3);
  --shadow-light: 0 2rem 5rem rgba(0, 0, 0, 0.06);
  --line: 1px solid var(--color-grey-light-2);
}

*,
*::after,
*::before {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}

html {
  font-size: 62.5%;
}

body {
  font-family: "Lato", sans-serif;
  font-weight: 400;
  min-height: 100vh;
  color: var(--color-text);
}

ul,
li {
  list-style: none;
  text-decoration: none;
}

h1,
h2,
h3,
h4,
h5,
h6,
p,
section {
  margin: 0;
  padding: 0;
}

button {
  border: none;
  background: none;
  font-family: "Lato", sans-serif;
  color: var(--color-text);
}

.comment_list > li {
  margin-bottom: 4rem;
}

.comments_section {
  width: 140rem;
  margin: 2rem 2rem;
  background-color: white;
  box-shadow: var(--shadow-dark);
  padding: 4rem;
  transform-origin: top left;
  transform: scale(0.7);
}

.no_comment_found {
  font-size: 1.5rem;
  text-align: center;
}

.comment_card {
  display: flex;
  flex-direction: column;
  padding: 2rem;
  border-radius: 5px;
  box-shadow: var(--shadow-light);
  margin-bottom: 2rem;
}

.figure {
  display: flex;
  justify-content: start;
  padding-bottom: 2rem;
  border-bottom: var(--line);
}

.image {
  width: 10rem;
  height: auto;
  object-fit: cover;
  border-radius: 50%;
  margin-right: 1rem;
}

.fig_caption {
  display: flex;
  flex-direction: column;
  justify-content: start;
  padding: 0.5rem 0;
}

.name {
  font-size: 2.8rem;
  margin-bottom: 0.5rem;
}

.occupation {
  font-size: 1.8rem;
  margin-bottom: auto;
}

.date {
  font-size: 1.8rem;
  font-weight: 400;
}

.comment_text {
  margin-left: 11rem;
  padding: 2rem 0;
  font-size: 2rem;
  font-weight: 400;
  border-bottom: var(--line);
}

.comment_options {
  margin-left: 11rem;
  padding: 1rem 0;
  display: flex;
}

.comment_options button {
  display: block;
  padding: 1rem;
  font-size: 1.9rem;
  color: var(--color-link);
  cursor: pointer;
}

.comment_options button:not(:last-child) {
  margin-right: 1rem;
}

.comment_options button:last-child {
  margin-left: auto;
}

.comment_options button:hover {
  background: var(--color-link-bg);
}

.comment_edit {
  margin-left: 11rem;
}

.comment_edit_message {
  font-size: 1.3rem;
  padding: 0.3rem 0;
}

textarea {
  font-family: "Lato", sans-serif;
  border: 1px solid var(--color-text);
  width: 100%;
  color: var(--color-text);
  font-size: 2.5rem;
  padding: 1.5rem;
}

.comment_edit_options {
  display: flex;
  padding: 1.4rem 0;
  padding-bottom: 2rem;
}

.comment_edit_textarea {
  padding-top: 2rem;
}

.comment_edit button {
  display: block;
  padding: 1rem;
  font-size: 1.9rem;
  color: var(--color-link);
  cursor: pointer;
}

.comment_edit button:not(:last-child) {
  margin-right: 1rem;
}

.comment_edit button:hover {
  background: var(--color-link-bg);
}
</style>
