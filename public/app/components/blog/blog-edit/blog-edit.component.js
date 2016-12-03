var blogEdit = {
  template: './app/components/blog/blog-edit/blog-edit.html',
  controller: BlogEditController,
  bindings: {
    post: '<'
  }
}

angular.module('blog')
  .component('blogEdit', blogEdit);