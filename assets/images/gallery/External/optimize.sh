#!/bin/bash

# Diretório de entrada
INPUT_DIR="/opt/lampp/htdocs/recanto-nazareno/assets/images/gallery/Internal"

# Verifica se o diretório existe
if [ ! -d "$INPUT_DIR" ]; then
    echo "Diretório não encontrado: $INPUT_DIR"
    exit 1
fi

# Processa todas as imagens JPEG no diretório especificado
for file in "$INPUT_DIR"/*.jpg; do
    if [ -f "$file" ]; then
        echo "Otimizar $file..."
        jpegoptim "$file"
    else
        echo "Nenhum arquivo JPEG encontrado no diretório."
    fi
done

echo "Otimização concluída."

