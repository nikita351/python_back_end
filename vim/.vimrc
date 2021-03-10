set nocompatible              " required
filetype off                  " required
set rtp+=~/.vim/bundle/Vundle.vim
call vundle#begin()
Plugin 'gmarik/Vundle.vim'

" All Plugins

Plugin 'mhartington/oceanic-next'
Plugin 'tmhedberg/SimpylFold'
Plugin 'vim-scripts/indentpython.vim'
Plugin 'vim-syntastic/syntastic'
Plugin 'nvie/vim-flake8'
Plugin 'scrooloose/nerdtree'
Plugin 'jistr/vim-nerdtree-tabs'
Plugin 'kien/ctrlp.vim'
Plugin 'tpope/vim-fugitive'
Plugin 'zxqfl/tabnine-vim'
Plugin 'frazrepo/vim-rainbow'
Plugin 'vim-airline/vim-airline'
Plugin 'vim-airline/vim-airline-themes'
Plugin 'davidhalter/jedi-vim'
Plugin 'ycm-core/YouCompleteMe'


call vundle#end()            " required
filetype plugin indent on    " required


" setting horizontal and vertical splits
set splitbelow
set splitright

set mouse=a
map <C-a> :NERDTreeToggle<CR>

"split navigations
nnoremap <C-J> <C-W><C-J>
nnoremap <C-K> <C-W><C-K>
nnoremap <C-L> <C-W><C-L>
nnoremap <C-H> <C-W><C-H>

" Enable folding
set foldmethod=indent
set foldlevel=99

" Enable folding with the spacebar
nnoremap <space> za


" Setting up indendation

au BufNewFile, BufRead *.py
    \ set tabstop=4 |
    \ set softtabstop=4 |
    \ set shiftwidth=4 |
    \ set textwidth=79 |
    \ set expandtab |
    \ set autoindent |
    \ set fileformat=unix

au BufNewFile, BufRead *.js, *.html, *.css
    \ set tabstop=2 |
    \ set softtabstop=2 |
    \ set shiftwidth=2

highlight BadWhitespace ctermbg=red guibg=darkred
au BufRead,BufNewFile *.py,*.pyw,*.c,*.h match BadWhitespace /\s\+$/

let g:ycm_autoclose_preview_window_after_completion=1
map <leader>g  :YcmCompleter GoToDefinitionElseDeclaration<CR>

" setting up pyflakes

let python_highlight_all=1
syntax on

" nerd tree settings
let NERDTreeIgnore=['\.pyc$', '\~$'] "ignore files in NERDTree


" Rainbow bracket settings
let g:rainbow_active = 1





" Настройки табов для Python, согласно рекоммендациям
set tabstop=4 

set shiftwidth=4

set smarttab

set expandtab "Ставим табы пробелами

set softtabstop=4 "4 пробела в табе

" Автоотступ
set autoindent

" Подсвечиваем все что можно подсвечивать
let python_highlight_all = 1

" Перед сохранением вырезаем пробелы на концах (только в .py файлах)
autocmd BufWritePre *.py normal m`:%s/\s\+$//e ``

" В .py файлах включаем умные отступы после ключевых слов
autocmd BufRead *.py set smartindent cinwords=if,elif,else,for,while,try,except,finally,def,class

syntax on "Включить подсветку синтаксиса

set nu        "Включаем нумерацию строк

set mousehide "Спрятать курсор мыши когда набираем текст

set mouse=a   "Включить поддержку мыши

set termencoding=utf-8 "Кодировка терминала

set novisualbell "Не мигать 

set t_vb= "Не пищать! (Опции 'не портить текст', к сожалению, нету)

" Удобное поведение backspace

set backspace=indent,eol,start whichwrap+=<,>,[,]

" Вырубаем черточки на табах
set showtabline=1

" Переносим на другую строчку, разрываем строки
set wrap
set linebreak

" Вырубаем .swp и ~ (резервные) файлы
set nobackup
set noswapfile
set encoding=utf-8 " Кодировка файлов по умолчанию
set fileencodings=utf8,cp1251

set clipboard=unnamed
set ruler

set hidden

" Выключаем звук в Vim
set visualbell t_vb=

imap ( ()<left>
imap [ []<left>
imap { {}<left>
inoremap " ""<left>
inoremap ' ''<left>
