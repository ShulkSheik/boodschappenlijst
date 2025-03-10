<nav>
  <a href="/"><?= urlIs("/") ? "<strong>List</strong>" : "List";?></a>
  <a href="/create"><?= urlIs("create") ? "<strong>Add</strong>" : "Add";?></a>
</nav>