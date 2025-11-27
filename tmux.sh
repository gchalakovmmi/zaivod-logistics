if [ -z "$IN_NIX_SHELL" ]; then
    exec nix-shell --run "$0"
fi

if tmux has-session -t zaivod-logistics 2>/dev/null; then
    tmux attach -t zaivod-logistics
else
    tmux new-session -ds zaivod-logistics -n make
    tmux send-keys -t zaivod-logistics:make"set -o vi; clear" C-m
    tmux new-window -t zaivod-logistics -n dev
    tmux send-keys -t zaivod-logistics:dev "set -o vi; clear" C-m
    tmux attach -t zaivod-logistics
fi
