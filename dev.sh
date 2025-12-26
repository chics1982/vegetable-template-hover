#!/bin/bash

# 開発サーバー起動スクリプト
# PHPビルトインサーバーとBrowser-Syncを起動

echo "🚀 開発サーバーを起動しています..."

# 終了時のクリーンアップ処理
cleanup() {
  echo ""
  echo "🛑 サーバーを停止しています..."
  kill $PHP_PID 2>/dev/null
  kill $BROWSERSYNC_PID 2>/dev/null
  exit 0
}

# Ctrl+Cなどのシグナルをトラップ
trap cleanup SIGINT SIGTERM

# PHPサーバーを起動（バックグラウンド）
php -S localhost:8000 &
PHP_PID=$!
echo "✅ PHPサーバーが起動しました (PID: $PHP_PID)"

# PHPサーバーの起動を待つ
sleep 2

# Browser-Syncを起動
echo "✅ Browser-Syncを起動しています..."
browser-sync start \
  --proxy "localhost:8000" \
  --files "**/*.php" "**/*.css" "**/*.js" "**/*.html" \
  --no-open &

# Browser-Sync PIDを保存
BROWSERSYNC_PID=$!

# Browser-Syncの起動を待つ
sleep 3

# ブラウザを開く（macOS用）
if [[ "$OSTYPE" == "darwin"* ]]; then
  echo "🌐 ブラウザを開いています..."
  open http://localhost:3000
fi

echo ""
echo "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━"
echo "✨ 開発サーバーが起動しました！"
echo ""
echo "  📱 URL: http://localhost:3000"
echo "  📝 PHPサーバー: http://localhost:8000"
echo ""
echo "  監視中のファイル:"
echo "    - **/*.php"
echo "    - **/*.css"
echo "    - **/*.js"
echo "    - **/*.html"
echo ""
echo "  停止するには Ctrl+C を押してください"
echo "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━"
echo ""

# Browser-Syncをフォアグラウンドに戻す
wait $BROWSERSYNC_PID

# Browser-Syncが終了したらPHPサーバーも停止
cleanup