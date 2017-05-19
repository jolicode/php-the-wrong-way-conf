edit() {
  NOW=`date +"%T"`
  if [ -z $1 ]; then
    echo "Parameter not passed!"
  else
    cp $1 "$1.$NOW"
    vi $1 # or nano, vim, emacs, pico, etc.
  fi
}
