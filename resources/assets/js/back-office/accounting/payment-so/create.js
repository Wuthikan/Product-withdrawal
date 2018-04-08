new Vue({
  el: '#main-content',
  data: {files: [1], amounts: [], isReady: false},
  created() {
    this.isReady = true;
    $('.container-wrapper').removeClass('hide');
  },
  methods: {
    addFile() {
      this.files.push(1);
    },
    selectedFile(index, e) {
      if (e.target.files && e.target.files[0]) {
        var reader = new FileReader();
        reader.onload = (e) => {
          if(e.target) {
            $(`label[for=upload-${index}]`).css({background: '#ccc url('+e.target.result+') top center no-repeat', backgroundSize: 'contain'});
          }
        }
        reader.readAsDataURL(e.target.files[0]);
      }
    },
    updateAmount(index, e) {
      this.amounts[index] = e.target.value;
      this.$forceUpdate();
    },
    totalAmount() {
      var total = this.amounts.reduce((a,b) => {
        var num = +b || 0;
        return a+num;
      }, 0);
      if (total)
        return total.toFixed && total.toFixed(2) || total;
      return "0.00";
    }
  }
});